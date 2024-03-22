

<div class="widget">
    <h5 class="title">Get in Touch</h5>
    <form method="POST" action="{{ route('get.in.touch') }}" class="sidebar__contact">
        @csrf
        <input name="name" type="text" placeholder="Enter name*">
        <input name="email" type="email" placeholder="Enter your mail*">
        <input name="phone" type="text" placeholder="Enter your phone*">
        <textarea name="message" name="message" id="message" placeholder="Message*"></textarea>
        <button type="submit" class="btn">send message</button>
    </form>
</div>