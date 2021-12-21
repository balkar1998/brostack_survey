@extends('layouts.app')

@section('content')
<link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <input type="text" placeholder="Search" style="width: 600px">
                <button type="submit" >Search</button>
            </div>
        </div>
        <div class="card front_article">
            <div class="col-md-8 offset-2">
                rggtdftdf
            </div>
            <hr>
            <div class="like_dislike_comment">
                <div class="like_dislike">
                    <span>    
                        <form action="" method="post">
                        <i class="fa fa-thumbs-up"></i>
                    </form>
                    </span>
                    <span>
                        <form action="" method="post">
                            <i class="fa fa-thumbs-down"></i>
                        </form>
                    </span>
                </div>
                <div class="comment_div">
                    
                </div>
            </div>
        </div>
        <div class=" card front_article">
            <div id="respond">
                <h3>Leave a Comment</h3>
                <form action="post_comment.php" method="post" id="commentform">
                  <label for="comment_author" class="required">Your name</label>
                  <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
                  <label for="email" class="required">Your email;</label>
                  <input type="email" name="email" id="email" value="" tabindex="2" required="required">
                  <label for="comment" class="required">Your message</label>
                  <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
                  <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
                  <input name="submit" type="submit" value="Submit comment" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
