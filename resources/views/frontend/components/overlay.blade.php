    <div class="col-xs-12 dekstop"
        style="z-index:999; padding:0px 50px; background: linear-gradient(90deg ,#02320d 0% ,#16813e 40% ,#129144 100%);">
        <!-- Page logo -->
        <div class="holder pull-right" style="width: auto !important;">
            <a href="mailto:{{ $contact->email_address ?? '' }}" style="color:#fafafa; margin-right:20px; line-height:70px;">
                <i class="fas fa-envelope"></i>
                &nbsp;{{ $contact->email_address ?? '' }} </a>
            <a href="mailto:{{ $contact->email_address_2 ?? '' }}"
                style="color:#fafafa; margin-right:20px; line-height:70px;">
                <i class="fas fa-envelope"></i>
                &nbsp;{{ $contact->email_address_2 ?? '' }} </a>
            <a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="_blank"
                style="color:#fafafa; margin-right:20px;">
                <i class="fab fa-whatsapp"></i>
                &nbsp;{{ $contact->phone_number ?? '' }} </a>
            <a href="https://wa.me/{{ $contact->phone_number_2 ?? '' }}" target="_blank" style="color:#fafafa;  margin-right:20px;">
                <i class="fa fa-phone"></i>&nbsp;{{ $contact->phone_number_2 ?? '' }} </a>
            <a href="https://wa.me/{{ $contact->phone_number_3 ?? '' }}" target="_blank" style="color:#fafafa;">
                <i class="fa fa-phone"></i>&nbsp;{{ $contact->phone_number_3 ?? '' }}</a>
        </div>
    </div>
