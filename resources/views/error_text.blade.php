<script src="{{asset('js/sweetalert.min.js')}}')}}"></script>  
<div class="col-md-12">
    <script>
        window.onload = function(event) {
            swal("Nous sommes desole!", "Aucun Resultat!", {
                icon : "error",
                buttons: {
                confirm: {
                    className : 'btn btn-danger'
                }
                },
            }); 
        }
    </script>
    <div class="alert col-md-12 alert-danger">
        Nous sommes désolé de n'avoir rien trouve. J'espère que vous nous pardonnerez. <br> Pour obtenir de meilleurs résultats qui se rapprocheraient de l'ideal, reessayez de la recherche.
    </div>
</div>
