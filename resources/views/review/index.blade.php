<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Form Reviews</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">

</head>
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }

    trix-toolbar [data-trix-button-group="history-tools"] {
        display: none;
    }

    /* trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    } */
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    :root {
        --yellow: #FFBD13;
        --blue: #4383FF;
        --blue-d-1: #3278FF;
        --light: #F5F5F5;
        --grey: #AAA;
        --white: #FFF;
        --shadow: 8px 8px 30px rgba(0, 0, 0, .05);
    }

    body {
        background: var(--light);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 1rem;
    }






    .wrapper {
        background: var(--white);
        padding: 2rem;
        max-width: 576px;
        width: 100%;
        border-radius: .75rem;
        box-shadow: var(--shadow);
        text-align: center;
    }

    .wrapper h3 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .rating {
        display: flex;
        justify-content: center;
        align-items: center;
        grid-gap: .5rem;
        font-size: 2rem;
        color: var(--yellow);
        margin-bottom: 2rem;

    }

    .rating .star {
        cursor: pointer;
    }

    .rating .star.active {
        opacity: 0;
        animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
    }

    @keyframes animate {
        0% {
            opacity: 0;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }


    .rating .star:hover {
        transform: scale(1.1);
    }

    textarea {
        width: 100%;
        background: var(--light);
        padding: 1rem;
        border-radius: .5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: .5rem;
    }

    .btn-group {
        display: flex;
        grid-gap: .5rem;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .btn-group .btn {
        padding: .75rem 1rem;
        border-radius: .5rem;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: .875rem;
        font-weight: 500;
    }

    .btn-group .btn.submit {
        background: var(--blue);
        color: var(--white);
    }

    .btn-group .btn.submit:hover {
        background: var(--blue-d-1);
    }

    .btn-group .btn.cancel {
        background: var(--white);
        color: var(--blue);
    }

    .btn-group .btn.cancel:hover {
        background: var(--light);
    }
</style>


<body>
    @include('navbar')
    <div class="wrapper">
        <h3>LEAVE A REVIEW!</h3>
        <form id="reviewForm" action="{{ route('review.store') }}" method="post">
            @csrf
            <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}" required="required"
                class="@error('user_id') is-invalid @enderror">
            @error('user_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="rating">
                <input type="hidden" name="rating" id="ratingInput" hidden
                    class="@error('rating') is-invalid @enderror">
                <i class='bx bx-star star' style="--i: 0;"></i>
                <i class='bx bx-star star' style="--i: 1;"></i>
                <i class='bx bx-star star' style="--i: 2;"></i>
                <i class='bx bx-star star' style="--i: 3;"></i>
                <i class='bx bx-star star' style="--i: 4;"></i>
            </div>
            @error('rating')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="hidden" name="description" id="description" class="description"
                value="{{ old('description') }}">
            <trix-editor input="description"></trix-editor>
            <div class="btn-group">
                <button type="button" class="btn submit" onclick="submitForm()">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const allStars = document.querySelectorAll('.rating .star');
        const ratingInput = document.getElementById('ratingInput');

        allStars.forEach((star, idx) => {
            star.addEventListener('mouseover', function() {
                resetStars();
                highlightStars(idx);
            });

            star.addEventListener('mouseout', function() {
                resetStars();
                highlightStars(parseInt(ratingInput.value) - 1);
            });

            star.addEventListener('click', function() {
                ratingInput.value = idx + 1;
            });
        });

        function resetStars() {
            allStars.forEach((star, idx) => {
                star.classList.remove('bxs-star');
                star.classList.remove('active');
                star.style.setProperty('--i', idx);
            });
        }

        function highlightStars(index) {
            for (let i = 0; i <= index; i++) {
                allStars[i].classList.add('bxs-star');
                allStars[i].classList.add('active');
            }
        }

        function submitForm() {
            document.getElementById('reviewForm').submit();
        }
    </script>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</body>

</html>
