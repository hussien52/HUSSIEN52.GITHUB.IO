</div>
</body>
<style>
    .kv-fileinput-error, .kv-fileinput-caption{
        display: none !important;
    }
    input:hover{
        border: 1px solid #337ab7;
    }
    .textarea:hover{
        border: 1px solid #337ab7;
    }
</style>
<script>

    $(document).fileinput({
        uploadUrl: 'http://localhost/ElibraryGA/public/.uploads/uploads.php?file_name=' + Math.random().toString(36).substring(2),
        dropZoneTitle: "Drag Your File Here ...", 
        overwriteInitial: false,
           // allowedFileTypes: "any",
            maxFileSize: "99999",
            maxFilesNum: 20,
        //    'elErrorContainer': '#errorBlock',
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });

    $(document).ready(function () {
        $("#test-upload").fileinput({
            'showPreview': false,
            'dropZoneTitle':"add attachment here ...",
            'elErrorContainer': '#errorBlock'
        });

    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109620211-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109620211-1');
</script>
</html>