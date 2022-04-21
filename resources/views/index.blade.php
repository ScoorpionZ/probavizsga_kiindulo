<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="css/szakdoga.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/szakdogakScript.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <main>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai') }}
            </h2>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="szakdolgozatoklistazasa">
                            Admin oldal
                            <div class="listaadmin">
                                <div class="fejlec row mb-3">
                                    <div class="szakdogacime col-2">Szakdolgozat címe</div>
                                    <div class="tagok col-2">Készítők neve</div>
                                    <div class="githublink col-md">GitHub link</div>
                                    <div class="oldallink col-md">Szakdolgozat elérhetősége</div>
                                    <div class=" col"></div>

                                </div>
                                <div id="tartalmak">
                                    <div class="tartalom row mb-3">
                                        <div class="szakdogacime col">Szakdolgozat címe</div>
                                        <div class="tagok col">Készítők neve</div>
                                        <div class="githublink col row">
                                            <a href="" class="gitlink col-md">GitHub link</a> 
                                            </div>
                                        <div class="oldallink col row"><a href="" class="weblink col-md">Oldal Link</a></div>

                                        <div class="row button col">
                                            <div class="col-6">
                                                <button type="submit" class="torles">Törlés</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="modositas">Módosítás</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                


                            </div>
                        </div>
                        <div class="ujadat">
                            <form >
                            @csrf
                                <div style="display:none row mb-3">
                                    <input type="text" id="id" class="col" >
                                </div>
                                <div class="sor row mb-3">
                                    <label for="szakdoga_nev" class="col-sm-3">Szakdolgozat címe</label>
                                    <input type="text" id="szakdoga_nev"  class="col-sm-9">
                                </div>
                                <div class="sor row mb-3">
                                    <label for="tagokneve" class="col-sm-3 ">Készítők neve</label>
                                    <input type="text" id="tagokneve"  class="col-sm-9">
                                </div>
                                <div class="sor row mb-3">
                                    <label for="oldallink" class="col-sm-3 ">Az oldal elérhetősége </label>
                                    <input type="text" id="oldallink" class="col-sm-9">
                                </div>
                                <div class="sor row mb-3">
                                    <label for="githublink" class="col-sm-3 "> GitHub elérhetőség</label>
                                    <input type="text" id="githublink"  class="col-sm-9">
                                </div>
                                <div class="gomb row mb-3">
                                    <button id="uj" class="col-2">Új</button>
                                    <button id="modosit" class="col-2">Módosít</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
        

