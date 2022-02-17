efsdfsd
<div id="msg_content">
    <div id="msg_detail" class="shadow-box shadow-hover bg-contrast p-3 rounded h-100 msg_details">
        <p class="bold text-darker mt-0">Leave a Message</p>

        <form action="{{route('sendmail')}}" method="POST">
            @csrf

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif

            <div class="mb-4">
                <label for="name" class="text-dark bold">Name</label>
                <input type="text" name="name" id="" class="form-control bg-contrast" placeholder="name">
            </div>

            <div class="mb-4">
                <label for="email" class="text-dark bold mb-0">Emailaddress</label>
                <input type="email" name="email" id="" class="form-control bg-contrast"
                    placeholder="Valid Email">
            </div>

            <div class="mb-4">
                <label for="phone" class="text-dark bold">Phone</label>
                <input type="tel" name="contact" id="" class="form-control bg-contrast"
                    placeholder="Phone no">
            </div>

            <div class="mb-4">
                <label for="contact_email" class="text-dark bold">Message</label>
                <textarea name="message" id="" class="form-control bg-contrast" rows="3">
                </textarea>
            </div>

            <div class="d-grid gap-2">
                <button id="" name="submit" type="submit"
                    class="btn btn-primary btn-rounded">Send
                    Message
                </button>
            </div>

        </form>
    </div>
    <button id="msg_click">Leave a message</button>
</div>
