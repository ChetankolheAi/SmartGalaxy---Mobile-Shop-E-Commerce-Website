

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful</title>
  <link rel="stylesheet" href="styles.css">


  <style>
    /* styles.css */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
  }
  
  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 1;
    transition: opacity 0.5s ease;
  }
  .overlay1 img{
    height: 90px;
    width: 300px;
  }
  .overlay12{
    height:220px;
  }
  .overlay12 img{
    height: 200px;
    width: 200px;
  }
  .overlay123 {

    position: relative;
    bottom: 195px;
    left: 5px;
  }
  .overlay123 img{
    width: 180px;
    height: 180px;
  }
  .success-container {
    width:100%;
    height: 100%;
    background: #2bff00;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transform: scale(0.8);
    opacity: 0;
    transition: opacity 0.5s ease, transform 0.5s ease;
    animation: fadeIn 1s ease-out forwards, scaleUp 1s ease-out forwards;
  }
  
  .overlay.fade-out {
    opacity: 0;
  }
  
  .icon {
    margin-bottom: 20px;
  }
  
  .checkmark {
    top: 50%;
    left: 50%;
    width: 35px;
    height: 88px;

    border-radius: 50%;
    position: absolute;
   
    animation: drawCheckmark 1s ease-out forwards;
  }
  
  .checkmark::before {
    content: '';
    position: relative;
    top: 50%;
    left: 50%;
    width: 35px;
    height: 88px;

    border-top: none;
    border-right: none;
    transform: rotate(55deg) scaleX(-1);
    transform-origin: left bottom;
    
  }
  
  @keyframes drawCheckmark {
    0% {
      width: 0;
      height: 0;
    }
    100% {
      width: 50px;
      height: 50px;
    }
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
  
  @keyframes scaleUp {
    from {
      transform: scale(0.8);
    }
    to {
      transform: scale(1);
    }
  }
  
  h1 {
    margin-top: 100px;
    color: #ffffff;
    font-size: 45px;
  }
  
  p {

    color: #ff0000;
    font-size: 20px;
  }
  
  button {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  
  button:hover {
    background-color: #0056b3;
  }
  .spinner {
    width: 100px; /* Adjust size as needed */
    height: 100px; /* Adjust size as needed */
    animation: spin 2s linear ;
  }
  
  @keyframes spin {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }
  </style>
</head>
<body>
  <div class="overlay">
    <div class="success-container">
      <div class="icon">
        <div class="checkmark"></div>
      </div>

      <h1>Order Placed Successfully!</h1>
      <p>Wait for verification from our side.</p>
      <div class="overlay12">
        <img src="img/ok.png" alt="" class="spinner">
            <div class="overlay123">
                <img src="img/tick.png" alt="#"  >
            </div>
      </div>  
      <button onclick="closeSuccess()">Close</button>
      <div class="overlay1">
        <img src="img/Smart_Galaxy.png" alt="" >
      </div>
     
      
      
    </div>
   
  </div>

  <script>
    function closeSuccess() {
      document.querySelector('.overlay').classList.add('fade-out');
      setTimeout(() => {
        window.location.href = 'orders.php'; // Redirect to homepage or another page
      }, 500); // Match the fade-out duration
    }
  </script>
</body>
</html>
