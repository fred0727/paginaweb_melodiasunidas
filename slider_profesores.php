<style>
  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
  }

  .slider-container {
    position: relative;
    width: 100%;
    max-width: 600px;
    margin: auto;
    overflow: hidden;
    background-color: white;
    border: 1px solid #ddd;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  .slider {
    display: flex;
    transition: transform 0.5s ease;
  }

  .slide {
    min-width: 100%;
    text-align: center;
    font-size: 24px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    /* Ajusta la altura según sea necesario */
  }

  button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
  }

  .prev {
    left: 0;
    border-radius: 0 5px 5px 0;
  }

  .next {
    right: 0;
    border-radius: 5px 0 0 5px;
  }
</style>

  <div class="slider-container">
    
  </div>
  <script>
    
  </script>