       <!-- Footer -->
       <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleciona "Logout" para encerrar sua sessão no sistema.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="<?= url() . '/login/sair' ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= url() . '/theme/vendor/jquery/jquery.min.js' ?>"></script>
<script src="<?= url() . '/theme/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= url() . '/theme/vendor/jquery-easing/jquery.easing.min.js'; ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= url() . '/theme/js/sb-admin-2.min.js'; ?>"></script>

<!-- Page level plugins -->
<script src="<?= url() . '/theme/vendor/chart.js/Chart.min.js'; ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= url() . '/theme/js/demo/chart-area-demo.js'; ?>"></script>
<script src="<?= url() . '/theme/js/demo/chart-pie-demo.js'; ?>"></script>

<!-- Page level plugins -->

<script src="<?= url() . "/theme/js/jquery.mask.min.js" ?>"></script>

<script type="text/javascript">
    jQuery(function($) {
        $("#campoData").mask("99/99/9999");
        $("#campoTelefone").mask("(99) 99999-9999");
        $("#campoSenha").mask("***-****");
    });
</script>
</body>

</html>