<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .section {
            flex: 1 1 300px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .section h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section ul {
            list-style-type: none;
            padding: 0;
        }

        .section ul li {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .button {
            position: absolute; 
            top: 75%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            padding: 10px 20px;
            background-color: #007bff; 
            color: white;
            border: none;
            border-radius: 5px; 
            cursor: pointer; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Shoes</h2>
            <ul>
                <li>Predator Football Boots</li>
                <li>X Football Boots</li>
                <li>Copa Football Boots</li>
                <li>Boost Shoes</li>
                <li>Ultraboost</li>
            </ul>
        </div>
        <div class="section">
            <h2>Apparels</h2>
            <ul>
                <li>New Arrivals</li>
                <li>Impossible is Nothing</li>
                <li>Exclusion</li>
                <li>Sale</li>
                <li>Last Chance</li>
            </ul>
        </div>
        <div class="section">
            <h2>SPORT</h2>
            <ul>
                <li>Manchester United</li>
                <li>Juventus</li>
                <li>Real Madrid</li>
                <li>Arsenal</li>
                <li>Bayern Munchen</li>
            </ul>
        </div>
    </div>
    <h2 align="center">Informasi Lebih Lanjut Klik Link dibawah ini!!</h2>
    <button class="button">Learn More</button>
</body>
</html>
