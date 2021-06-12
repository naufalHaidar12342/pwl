<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏠Inventarisasi</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- google material icons -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />

    <!-- css -->
    <!-- <link rel="stylesheet" href="../assets/css/styling.css"> -->
    <!--  -->
    <style>
        .wrapper {
            position: fixed;
            width: 500px;
            max-width: 80%;
            transform: translate(-50%, -50%);
            background: white;
            z-index: 10;
            top: 50%;
            left: 50%;
            display: none;
            border: 1px solid black;
            border-radius: 8px;
        }



        .wrapper .confirm-box {
            padding: 10px 15px;
            width: 350px;
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .wrapper .confirm-header {
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .confirm-header .header-title {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .confirm-header .close-button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-size: 1.1rem;
            font-weight: bold;
        }

        #overlay {
            position: fixed;
            opacity: 0;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }

        #overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        .wrapper.open {
            display: flex;
        }
    </style>

</head>

<body>