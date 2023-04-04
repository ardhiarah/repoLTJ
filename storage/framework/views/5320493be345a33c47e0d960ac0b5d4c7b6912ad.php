<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Repo LTJ</title>
    <meta content="This is repo LTJ ready to fly" name="keywords">
    <meta content="This is repo LTJ ready to fly. Doesn't need to install all the npm." name="description">
    <link rel="icon" href="/images/a.png" sizes="16x16">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</head>
<body id="body" class="bg-slate-700 text-white text-center transition-all">
    <div id="repo" class="font-black mt-20 mx-10 px-4 py-2 rounded-lg ring-1 ring-cyan-300 shadow-lg shadow-teal-400 bg-teal-500">
        THIS is Repo LTJ
    </div>

    <button id="button" onclick="repo()" class="mt-10 font-black px-4 py-2 rounded-full bg-gradient-to-r from-green-400 to-blue-500 hover:ring-1 hover:ring-cyan-300 hover:shadow-sm hover:shadow-teal-400">Testing Button</button>

</body>
<script>
    function repo() {
        if ($('#repo').text() == 'THIS is Repo LTJ') {
            $('#repo').html('jQuery Active!');
            $('#repo').removeClass('ring-cyan-300 shadow-lg shadow-teal-400 bg-teal-500');
            $('#repo').addClass('ring-yellow-300 shadow-lg shadow-lime-400 bg-lime-500');
            $('#button').html('Rollback Button');
        } else {
            $('#repo').html('THIS is Repo LTJ');
            $('#repo').removeClass('ring-yellow-300 shadow-lg shadow-lime-400 bg-lime-500');
            $('#repo').addClass('ring-cyan-300 shadow-lg shadow-teal-400 bg-teal-500');
            $('#button').html('Testing Button');
        }
    }

</script>
</html>
<?php /**PATH C:\laragon\www\vr\resources\views/master.blade.php ENDPATH**/ ?>