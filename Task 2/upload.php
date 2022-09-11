<html>
<head>
    <title>Upload</title>
</head>
<body>
    <div>
        <form enctype="multipart/form-data" action="process.php" method="POST">    
            <div>
            <label>Upload .CSV file</label>
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input id="csv" type="file" name="csv_userfile" accept=".csv">
            <button type="submit" name="csv_upload">Загрузить</button>
        </form>
    </div>
</body>
</html>