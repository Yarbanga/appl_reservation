<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/Adm_reserv.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jqucontainer.min.js"></script>
    <div class="ery-fluid px-0 px-sm-2 mx-auto" style="width: 50%;">
        <div class="row justify-content-center mx-0">
            <div class="col-lg-10">
                <div class="card border-0">
                    <form method="post" action="{{route('admin.store')}}" autocomplete="off">
                    @csrf
                        <div class="container d-flex justify-content-center">
                            <div class="card p-3">
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text location"><i class="fas fa-map-marker-alt"></i></span> </div> <input type="text" class="form-control" placeholder="Localisation" name="localisation">
                                </div>
                                <div class="input-group mt-2">
                                    <div class="input-group-prepend"> <span class="input-group-text location"><i class="fas fa-calendar-week mr-3"></i></span> </div> <input type="date" class="form-control" name="date">
                                </div>
                                <div class="input-group mt-2">
                                    <div class="input-group-prepend"> <span class="input-group-text location"> <i class="fas fa-fw fa-tachometer-alt"></i></span> </div><input type="text" class="form-control" placeholder="heure" name="heure">
                                </div>
                                  <button type="submit" class="btn btn-primary mt-3"><span>Ajouter</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>