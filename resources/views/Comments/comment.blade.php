<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comments Section</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/comment.css') }}">

</head>

<body>
  <!-- Form to share the user review... -->
  <div class="d-flex justify-content-center mt-5 align-items-center container">
    <form action="" method="POST" enctype="multipart/form-data" class="mt-5">
      <h5><label for="w3review">Please give us your review:</label></h5>
      <textarea rows="5" cols="100" placeholder="We wish to hear the experience you gathered with us..."></textarea>
      <br> <br>
      <button class="btn btn-success">Submit</button>
    </form>
  </div>

  <!-- show all the comments -->
  <div class="container px-5 mt-5">
    <h4 class="font-weight-bold">All Comments:</h4>
    <div class="mt-3">
      <b>Rabina Shahi</b>
      <p >Memorial part of my life..</p>
      <a href="javascript::void(0);" class="link-danger text-decoration-none" onclick="reply(this)">Reply</a>
    </div>
    <div class="mt-3">
      <b>Radha Krishna</b>
      <p >Memorial part of my life..</p>
      <a href="javascript::void(0);" class="link-danger text-decoration-none"  onclick="reply(this)">Reply</a>
    </div>
    <div class="mt-3">
      <b>Rabin Sabin</b>
      <p >Memorial part of my life..</p>
      <a href="javascript::void(0);" class="link-danger text-decoration-none"  onclick="reply(this)">Reply</a>
    </div>

    <div class="mt-3 mb-3 replydiv" style="display:none;" >
    <textarea rows="5" cols="70" placeholder="We wish to hear the experience you gathered with us..."></textarea>
      <a href="" class="btn btn-success mx-3  marginbtn">Reply</a>
    </div>

  </div>
  
  <script src="{{url('js/reply.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>