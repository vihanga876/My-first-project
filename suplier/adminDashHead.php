

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminDashStyle.css">
    <style type="text/css">
        main.tabel {
            text-align: center;
            width: 100%;
            height: 90vh;
            background-color: #fff5;
            /* backdrop-filter: blur(7px); */
            box-shadow: 0 .4rem .8rem #0005;
            border-radius: .8rem;
            overflow: scroll;
        }

        .tabel_header {
            width: 100%;
            height: 10%;
            background-color: rgba(5, 15, 124, 0.267);
            padding: .8rem 1rem;
        }

        .tabel_body {
            width: 95%;
            max-height: calc(89% - .8rem);
            background-color: #fffb;
            margin: .8rem auto;
            border-radius: .6rem;
            overflow: .6rem;
        }

        .tabel_body::-webkit-scrollbar {
            width: 0.5rem;
            height: 0.5rem;
        }

        .tabel_body::-webkit-scrollbar-thumb {
            border-radius: .5rem;
            background-color: #0004;
        }

        td img {
            width: 70px;
            height: 70px;
            margin-right: .5rem;
            border-radius: 50%;

            vertical-align: middle;
        }

        table,
        th,
        td {
            /* border-collapse: collapse; */
            padding: 1rem;
        }

        thead th {
            position: sticky;
            left: 0;
            top: 0;
            background-color: #d5d1de;
        }

        tbody tr:nth-child(even) {
            background-color: #0000000b;
        }

        tbody tr:hover {
            background-color: #21202338;
        }

        .status {
            width: 100px;
            background-color: #86e49d;
            padding: .4rem 0;
            border-radius: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
   