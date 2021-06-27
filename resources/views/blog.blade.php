<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor</title>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    </head>
    <body>
        <form method="post">
            @csrf
            <textarea name="editor1"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            <input type="submit" value ="ok">
        </form>
    </body>
</html>