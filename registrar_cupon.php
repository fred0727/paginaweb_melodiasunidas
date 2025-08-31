<?php
// Configuración de la base de datos
define('HOST', 'srv1689.hstgr.io');
define('DB', 'u603781914_app');
define('USER', 'u603781914_admin');
define('PASSWORD', '@dminDb2024');
define('CHARSET', 'utf8mb4');
define('PORT', '3306');

// Configuración de la base de datos en local
// define('HOST', 'localhost');
// define('DB', 'mycalendar_2805');
// define('USER', 'root');
// define('PASSWORD', '');
// define('CHARSET', 'utf8mb4');
// define('PORT', '3306');

// Función para generar contraseña simple
function generar_contrasena($longitud = 8)
{
  $caracteres = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789';
  return substr(str_shuffle(str_repeat($caracteres, $longitud)), 0, $longitud);
}

// Función para enviar WhatsApp al admin
function sendMessageAdmin($message)
{
  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://www.wasenderapi.com/api/send-message",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
      'to' => "34604369473",
      // 'chatId' => "51924471461@c.us",
      'text' => $message
    ]),
    CURLOPT_HTTPHEADER => [
      "accept: application/json",
      "authorization: Bearer b9a3385066f49ad42b991daf9a5b97c8df6398d906b173fb2c1e2d1eafff87f3",
      "content-type: application/json"
    ],
  ]);

  // Solo local
  // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
}

// Conexión a la base de datos
try {
  $dsn = "mysql:host=" . HOST . ";dbname=" . DB . ";charset=" . CHARSET . ";port=" . PORT;
  $pdo = new PDO($dsn, USER, PASSWORD, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]);
} catch (PDOException $e) {
  die("Error al conectar: " . $e->getMessage());
}

// Recibir datos
$nombre   = trim($_POST['nombre'] ?? '');
$apellido = trim($_POST['apellido'] ?? '');
$email    = trim($_POST['email'] ?? '');
$cupon    = trim($_POST['cupon'] ?? '');
$codigo   = trim($_POST['codigo'] ?? '');
$numero   = trim($_POST['numero'] ?? '');
$tipocupon   = trim($_POST['tipocupon'] ?? '');
$zona_horaria   = 'America/Bogota';

// Validaciones básicas
if (!$nombre || !$apellido || !$email || !$cupon || !$codigo || !$numero || !$tipocupon) {
  die("⚠️ Faltan campos obligatorios.");
}

// Validar que el cupón no esté usado
$stmt = $pdo->prepare("SELECT iduser FROM users WHERE cupon = ?");
$stmt->execute([$cupon]);
if ($stmt->fetch()) {
  echo "<script>alert('❌ Este cupón ya fue registrado.'); window.history.back();</script>";
  exit;
}

// Validar que el email no esté usado
$stmt = $pdo->prepare("SELECT iduser FROM users WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->fetch()) {
  echo "<script>alert('❌ Este correo ya está registrado.'); window.history.back();</script>";
  exit;
}

// Generar contraseña
$contrasena = generar_contrasena();
$hash = $contrasena; // Se recomienda cambiar esto por password_hash() en el futuro
$fecha = date('Y-m-d H:i:s');

// Insertar en la tabla `users`
$stmt = $pdo->prepare("INSERT INTO users 
    (email, pass, name, lastname, code_country, phone, user_type, status, grupo,tipocupon, cupon,emails_status, fecha_registro, zona_horaria)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?)");
$stmt->execute([
  $email,
  $hash,
  $nombre,
  $apellido,
  intval(str_replace('+', '', $codigo)),
  $numero,
  'user',
  1,
  'cupon',
  $tipocupon,
  $cupon,
  0,
  $fecha,
  $zona_horaria
]);

if ($tipocupon === 'cursos') {
  $message = '<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Melodías Unidas – Registro Exitoso</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 0; margin: 0;">
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" style="padding: 30px 10px;">
        <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
          <tr>
            <td style="background-color: #1d4ed8; padding: 20px; text-align: center;">
              <img src="https://melodiasunidas.com/images/logo/iconoround.png" alt="Melodías Unidas" width="60" height="60" style="border-radius: 50%;" />
              <h1 style="color: #ffffff; font-size: 22px; margin: 10px 0 0;">¡Bienvenido a Melodías Unidas!</h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 30px;">
              <p>Hola <strong>' . htmlspecialchars($nombre . ' ' . $apellido) . '</strong>,</p>
              <p>Gracias por adquirir el acceso completo a nuestra biblioteca digital de formación musical. Desde este momento, tienes acceso vitalicio a:</p>
              <ul style="list-style: none; padding-left: 0; margin-bottom: 16px;">
                <li>🎹🎸 <strong>Cuatro cursos completos:</strong> Lenguaje musical, Teoría musical, Producción musical, Improvisación al piano</li>
                <li>🎁 <strong>Te damos acceso gratis a un paquete de diez partituras</strong> con mucho flow de nuestros dos catálogos oficiales, para que empieces a tocar sin esperar ni un minuto.<br>
                  👉 <a href="https://drive.google.com/drive/folders/1RmIn9GmARJUDKy2DXnCMja1fKctD6Bs8?usp=drive_link" style="color: #1d4ed8;">Accede aquí a las 10 partituras de regalo (Google Drive)</a>
                </li>
                <li>📎 También te adjuntamos un resumen con el contenido detallado de cada curso para que sepas exactamente qué vas a aprender en cada clase.</li>
              </ul>
              <p><strong>🔐 Credenciales de acceso a todo el contenido:</strong><br></p>
              <ul style="list-style: none; padding-left: 0;">
                <li><strong>📧 Usuario:</strong> ' . htmlspecialchars($email) . '</li>
                <li><strong>🔑 Contraseña:</strong> ' . htmlspecialchars($contrasena) . '</li>
              </ul>
              <p style="margin-top: 20px;">
                <a href="https://app.melodiasunidas.com" style="display: inline-block; background-color: #1d4ed8; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: bold;">Accede ahora a tu área privada</a>
              </p>
              <p>Empieza hoy, aunque solo sea 10 minutos. A veces solo hace falta volver a escuchar algo que ya tenías dentro.</p>
              <p>¿Alguna duda con tu acceso o con el contenido incluido? Puedes consultar nuestra sección de preguntas frecuentes, está muy clara y se actualiza a menudo:<br>
                👉 <a href="https://melodiasunidas.com/faq.php" style="color: #1d4ed8;">melodiasunidas.com/FAQ</a>
              </p>
              <blockquote style="font-style: italic; color: #555; border-left: 3px solid #1d4ed8; margin: 20px 0; padding-left: 12px;">
                🗣️ “Tenía miedo de no entender nada... pero en menos de una hora ya estaba tocando una melodía que me encantaba.”<br>
                – Sofía, 44 años, alumna de Colombia
              </blockquote>
              <p>¡Nos alegra tenerte con nosotros! 🎼<br>
              El equipo de Melodías Unidas</p>
              <hr style="border: none; border-top: 1px solid #eee; margin: 30px 0;">
              <p style="font-size: 14px; color: #777;">
                <strong>Nota importante:</strong><br>
                Este mensaje ha sido enviado desde una dirección automatizada de notificación y no está habilitada para recibir respuestas. Sabemos lo valioso que es tu tiempo, por eso hemos centralizado todas las consultas frecuentes en una sección especialmente diseñada para resolver cualquier duda relacionada con tu acceso, contenidos o funcionamiento de la plataforma. Para ello, te invitamos a visitar nuestra sección de preguntas frecuentes, donde encontrarás toda la información detallada y permanentemente actualizada.
              </p>
            </td>
          </tr>
          <tr>
            <td style="background-color: #f1f5f9; text-align: center; padding: 16px; font-size: 12px; color: #94a3b8;">
              © ' . date("Y") . ' Melodías Unidas – Todos los derechos reservados
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
} else {
  $message = '<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Melodías Unidas – Registro Exitoso</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 0; margin: 0;">
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" style="padding: 30px 10px;">
        <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
          <tr>
            <td style="background-color: #1d4ed8; padding: 20px; text-align: center;">
              <img src="https://melodiasunidas.com/images/logo/iconoround.png" alt="Melodías Unidas" width="60" height="60" style="border-radius: 50%;" />
              <h1 style="color: #ffffff; font-size: 22px; margin: 10px 0 0;">¡Bienvenido a Melodías Unidas!</h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 30px;">
              <p>Hola <strong>' . htmlspecialchars($nombre . ' ' . $apellido) . '</strong>,</p>
              <p>Gracias por adquirir el acceso completo a nuestro catálogo digital de partituras didácticas. Desde este momento, tienes acceso vitalicio a:</p>
              <ul style="list-style: none; padding-left: 0; margin-bottom: 16px;">
                <li>📚 <strong>Catálogo “Melodías en Diez”:</strong> Partituras progresivas para piano con digitación, nombres de nota y estructura clara, diseñadas para tocar con solo diez teclas, sin necesidad de mover las manos.</li>
                <li>📅 <strong>Catálogo “Partitura del Mes”:</strong> Obras cuidadosamente seleccionadas y organizadas en 4 niveles de dificultad, con nuevo contenido cada mes.</li>
                <li>🎁 Como complemento perfecto para tus partituras, te damos acceso completo a nuestro curso de Lenguaje Musical, para que puedas reforzar conceptos esenciales mientras practicas.<br>
                  👉 <a href="https://drive.google.com/drive/folders/19asXK1fU-TvGy_LQCe6BNMsFg1qJfb7W?usp=drive_link" style="color: #1d4ed8;">Accede aquí al curso completo de Lenguaje Musical (Google Drive)</a>
                </li>
              </ul>
              <p><strong>🔐 Credenciales de acceso a todo el contenido:</strong><br></p>
              <ul style="list-style: none; padding-left: 0;">
                <li><strong>📧 Usuario:</strong> ' . htmlspecialchars($email) . '</li>
                <li><strong>🔑 Contraseña:</strong> ' . htmlspecialchars($contrasena) . '</li>
              </ul>
              <p style="margin-top: 20px;">
                <a href="https://app.melodiasunidas.com" style="display: inline-block; background-color: #1d4ed8; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: bold;">Accede ahora a tu área privada</a>
              </p>
              <p>Empieza hoy, aunque solo sea 10 minutos. A veces solo hace falta volver a escuchar algo que ya tenías dentro.</p>
              <p>¿Tienes dudas sobre cómo acceder o cómo empezar a practicar? Aquí puedes consultarlo todo:<br>
                👉 <a href="https://melodiasunidas.com/faq.php" style="color: #1d4ed8;">melodiasunidas.com/FAQ</a>
              </p>
              <blockquote style="font-style: italic; color: #555; border-left: 3px solid #1d4ed8; margin: 20px 0; padding-left: 12px;">
                🗣️ “Me enamoré del catálogo de partituras. Enseguida encontré piezas que podía tocar sin complicaciones.”<br>
                – Laura, 36 años, alumna en Medellín
              </blockquote>
              <p>¡Nos alegra tenerte con nosotros! 🎼<br>
              El equipo de Melodías Unidas</p>
              <hr style="border: none; border-top: 1px solid #eee; margin: 30px 0;">
              <p style="font-size: 14px; color: #777;">
                <strong>Nota importante:</strong><br>
                Este mensaje ha sido enviado desde una dirección automatizada de notificación y no está habilitada para recibir respuestas. Sabemos lo valioso que es tu tiempo, por eso hemos centralizado todas las consultas frecuentes en una sección especialmente diseñada para resolver cualquier duda relacionada con tu acceso, contenidos o funcionamiento de la plataforma. Para ello, te invitamos a visitar nuestra sección de preguntas frecuentes, donde encontrarás toda la información detallada y permanentemente actualizada.
              </p>
            </td>
          </tr>
          <tr>
            <td style="background-color: #f1f5f9; text-align: center; padding: 16px; font-size: 12px; color: #94a3b8;">
              © ' . date("Y") . ' Melodías Unidas – Todos los derechos reservados
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
}

if ($tipocupon === 'cursos') {
  $subject = ' ¡Bienvenido a Melodías Unidas! 🎶 Tu acceso vitalicio ya está activo';
} else {
  $subject = '¡Bienvenido a Melodías Unidas! 🎶 Tu acceso vitalicio ya está activo';
}

// Enviar correo al usuario
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/mailer/PHPMailer.php';
require 'src/mailer/SMTP.php';
require 'src/mailer/Exception.php';

$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.hostinger.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'soporte.promociones@melodiasunidas.com';
  $mail->Password   = 'oZ8RNzhs[';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;
  $mail->CharSet    = 'UTF-8';

  $mail->setFrom('soporte.promociones@melodiasunidas.com', 'Melodías Unidas');
  $mail->addAddress($email, "$nombre $apellido");
  $mail->addBCC('soporte.promociones@melodiasunidas.com');

  // Adjuntar archivos PDF si es cupón de cursos
  if ($tipocupon === 'cursos') {
    $archivos_pdf = [
      'src/pdf/cursoscuponatic/CURSO DE LENGUAJE MUSICAL.pdf',
      'src/pdf/cursoscuponatic/CURSO DE TEORÍA MUSICAL.pdf',
      'src/pdf/cursoscuponatic/CURSO DE PRODUCCIÓN MUSICAL.pdf',
      'src/pdf/cursoscuponatic/CURSO DE IMPROVISACIÓN AL PIANO.pdf'
    ];
    
    foreach ($archivos_pdf as $archivo) {
      if (file_exists($archivo)) {
        $mail->addAttachment($archivo);
      }
    }
  }

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  // Enviar correo
  $mail->send();

  // Enviar WhatsApp al administrador
  $mensajeWhatsapp = "📲 *Nuevo registro por CUPÓN* 🎉\n\n👤 *Nombre:* $nombre $apellido\n📧 *Email:* $email\n🎟️ *Cupón:* $cupon\n📞 *Teléfono:* +$codigo $numero\n🕒 *Fecha:* $fecha";
  sendMessageAdmin($mensajeWhatsapp);

  echo "<script>alert('✅ Registro exitoso. Revisa tu correo.'); window.location.href = 'gracias.html';</script>";
} catch (Exception $e) {
  error_log("Error al enviar el correo: {$mail->ErrorInfo}");
  echo "<script>alert('⚠️ Registro realizado, pero no se pudo enviar el correo.');</script>";
}
