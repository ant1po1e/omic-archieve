@extends('layout.main')

@section('container')
<!-- Contact -->
<section id="contact" class="pb-5">
    <div class="container" data-aos="fade-up">
        <div class="row text-center mb-5">
            <div class="col">
                <h2>Contact <span class="acolor">Ant1po1e</span></h2>
            </div>
        </div>
        <div class="row justify-content-center text-center bg-content">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Thanks!</strong> Your message has been submitted.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form name="Ant1po1e-contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email1" aria-describedby="email"
                            name="email" />
                    </div>
                    <div class="mb-4">
                        <label for="Message" class="form-label">Message</label>
                        <textarea class="form-control" id="Message" rows="3" name="message"></textarea>
                    </div>
                    <button id="submit" type="submit" class="btn btn-send">Submit</button>

                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact-END -->
@endsection