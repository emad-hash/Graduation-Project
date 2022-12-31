<div>
    <style>
        
.comment-form-rating>span{
    font-size: 14px;
    line-height: 20px;
    display: block;
    float: left;
    margin-right: 7px;
    color: #666;
}
 .comment-form-rating ~ p{
    margin-bottom: 0 !important;
}
 .comment-form-rating p.stars{
    display: inline-block;
    margin-bottom: 0 !important;
}
.comment-form-rating .stars input[type=radio]{
    display: none;
}
.comment-form-rating .stars label{
    display: block;
    float: left;
    margin: 0;
    padding: 0 2px;
}
.comment-form-rating .stars label::before{
    content: "\f005";
    font-family: FontAwesome;
    font-size: 15px;
    /*color: #e6e6e6;*/
    color: #efce4a;
}
.comment-form-rating .stars input[type=radio]:checked ~ label::before{
    color: #e6e6e6 ;
}
.comment-form-rating .stars:hover label::before{
    color: #efce4a !important;
}
.comment-form-rating .stars label:hover ~ label::before{
    color: #e6e6e6 !important;
}
.comment-form-rating{
    margin-bottom: 15px;
}
.comments-text{
    padding-bottom: 20px;
}

    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">My Account </a>
                    <span></span> Review
                </div>
            </div>
        </div>
        <section class="co">
            <div class="container">
                <div class="row">
                    <div class="comment-form">
                        <h4 class="mb-15">Add Review</h4>
                        <div class="row">
                            @if(Session::has('message'))
                             <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="">
                                <figure class="border-radius-10">
                                    <img src="{{asset('assets/imgs/products')}}/{{$orderItem->product->image}}" alt="product image" width="150px" class="border-radius-10 pb-10">
                                </figure>
                                <p class="comments-text"> 
                                    <strong class="pb-10">{{$orderItem->product->name}}</strong>                                           
                                </p>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <form class="form-contact comment_form"  id="commentForm" wire:submit.prevent="addReview">
                                    <div >
                                        <div class="comment-form-rating">
                                            <span>Your rating</span>
                                            <p class="stars"> 
                                                <label for="rated-1"></label>
                                                <input type="radio" id="rated-1" name="rating" value="1" wire:model="rating">
                                                <label for="rated-2"></label>
                                                <input type="radio" id="rated-2" name="rating" value="2" wire:model="rating">
                                                <label for="rated-3"></label>
                                                <input type="radio" id="rated-3" name="rating" value="3" wire:model="rating">
                                                <label for="rated-4"></label>
                                                <input type="radio" id="rated-4" name="rating" value="4" wire:model="rating">
                                                <label for="rated-5"></label>
                                                <input type="radio" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating">
                                                @error('rating') <span class="text-danger">{{$message}}</span> @enderror
                                            </p>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" wire:model="comment"></textarea>
                                                @error('comment') <span class="text-danger">{{$message}}</span> @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button button-contactForm">Submit
                                            Review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

</div>

