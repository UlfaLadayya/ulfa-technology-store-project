<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Local -->
     <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <!-- Icon -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <title>Ulfa Technology Store | {{ $title }}</title>
</head>
<body>

    @include('partials.navbar')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var currentUrl= window.location.pathname;
            var sidebarLink = document.querySelectorAll('#side-navbar .list-unstyled a');

            sidebarLink.forEach(function(link) {
                var href = link.getAttribute('href');
                var liElements = link.parentElement;

                liElements.classList.remove('active');

                if (currentUrl === href || (currentUrl === '/' && href === '/')) {
                    liElements.classList.add('active');
                    console.log('Added active class to : ', href);
                }
            });
        })
        // $(".sidebar ul li").on('click' , function(){
        //     $(".sidebar ul li.active").removeClass('active');
        //     $(this).addClass('active');
        // })
    </script>
</body>
</html>