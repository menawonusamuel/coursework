<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="school app">
    <meta name="keywords" content="school research">
    <meta name="blessing" content="blessing"><meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            -webkit-animation-name: fadeIn; /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            top: 0;
            background-color: #fefefe;
            width: 100%;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {top: -300px; opacity: 0}
            to {top: 0; opacity: 1}
        }

        @keyframes slideIn {
            from {top: -300px; opacity: 0}
            to {top: 0; opacity: 1}
        }

        @-webkit-keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }

        @keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }
    </style>
    <title>Student Sharing paper app| Login page</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<header>
    <div class="container">

        <h1><span class="highlight">Research Paper  </span>Sharing  App</h1>
    </div>

    <nav>
        <ul>