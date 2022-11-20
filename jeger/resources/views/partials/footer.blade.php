<footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/modal.js')}}"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <script>
    const form = document.getElementById('submitForm');
    form.addEventListener('submit', function(e) {
        reset();
        e.preventDefault();
        document.getElementById('emailLabel').classList.add('d-none');
        document.getElementById('chooseFileLabel').classList.add('d-none');
        document.getElementById('chooseFileType').classList.add('d-none');
        const emailRegex = new RegExp(
            /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)$/
        );
        const email = document.getElementById('email').value;
        const isValidEmail = emailRegex.test(email);
        if (isValidEmail == false) {
            document.getElementById('emailLabel').classList.remove('d-none');
            document.getElementById('emailLabel').classList.add('d-block');
            return;
        }

        if (document.getElementById("file").files.length == 0) {
            document.getElementById('chooseFileLabel').classList.remove('d-none');
            document.getElementById('chooseFileLabel').classList.add('d-block');
            return;
        }
        var file = document.getElementById('file');
        if (/\.(jpe?g|png|gif|tiff|pdf)$/i.test(file.files[0].name) === false) {
            document.getElementById('chooseFileType').classList.remove('d-none');
            document.getElementById('chooseFileType').classList.add('d-block');
            return
        }

            //AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let formData = new FormData(this);
            $('#file-input-error').text('');
            $('#modalJegger').modal('hide');
            startLoader();
            $.ajax({
                type: 'POST',
                url: "{{ route('file.store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response.success == 1) {
                        this.reset();
                        endLoader();
                        success();
                    }
                    else if(response.success == 0)
                    {
                        this.reset();
                        endLoader();
                        error();
                    }
                    else if(response.success == 2)
                    {
                        this.reset();
                        endLoader();
                        errorStatus();
                    }
                },
                error: (response) =>{
                    if (response == 3) {
                        this.reset();
                        endLoader();
                        errorAJAX();
                    }
                }
            });

    });
    </script>
</footer>
