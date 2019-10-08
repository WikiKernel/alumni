<!doctype html>
<html lang="en">

<head>
    <title>UNIQUEQUESTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">{{$question->title}}</h4>
        <p class="card-text">{{$question->body}}</p>
        </div>
        <ul class="list-group list-group-flush">
        </ul> 
        <button type="button" class="btn btn-outline-primary">Edit</button>
   </div>
   
   
@foreach ($answers as $answer)
   @if($answer->q_id==$question->id)
    <div class="list-group">
        <h6 class="list-group-item flex-column align-items-start">
        <p class="mb-1">{!! $answer->body !!}
        <form action="/uniquequestion/{{$question->id}}" method="POST">
                @csrf
            <input type="checkbox" name="correctAnswer" value=1 ></p>
        </h6>

    </div>
    @endif
    @endforeach
    <button type="submit" class="btn btn-primary">marcar la respuesta culea</button>
            </form>

    @include('faq.createAnswer ', ["question"=>$question]) 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

