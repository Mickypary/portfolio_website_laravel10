

<div class="col-lg-6">
    <div class="homeContact__form">
        <form method="post" action="{{ route('get.in.touch') }}">
        	@csrf
            <input name="name" type="text" placeholder="Enter name*">
            <input name="email" type="email" placeholder="Enter mail*">
            <input name="phone" type="phone" placeholder="Enter phone*">
            <textarea name="message" placeholder="Enter Message*"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>