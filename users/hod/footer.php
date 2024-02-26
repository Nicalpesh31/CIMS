

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/purecounter/purecounter.js"></script>
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Main JS File -->
<script src="../../assets/js/main.js"></script>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- jQuery DataTable - JS -->
<script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#students-table').DataTable({
            responsive: true,
            "scrollX": true
        });
    });
</script>
<script>
        $(document).ready(function() {
            $('#lecturers-table').DataTable({
                responsive: true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#notices-table').DataTable({
                responsive: true,
                /*  "scrollX": true */
            });
        });
    </script>
    <script>
        $(document).ready(function() {
                $('#question-papers-table').dataTable({
                    responsive: true,
                    'scrollX': true
                })
            })
            </script>
            <script>
        ClassicEditor
            .create(document.querySelector('#notice-content'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>