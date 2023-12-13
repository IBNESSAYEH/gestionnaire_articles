<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Article Form</title>
</head>
<body>
<div class="container mt-5">
    <form>
        <div class="form-group">
            <label for="articleTitle">Title</label>
            <input type="text" class="form-control" id="articleTitle" placeholder="Enter article title">
        </div>
        <div class="form-group">
            <label for="articleContent">Content</label>
            <textarea class="form-control" id="articleContent" rows="5" placeholder="Enter article content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
