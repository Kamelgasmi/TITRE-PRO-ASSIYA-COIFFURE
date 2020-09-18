<?php 
$title = 'Assiya Coiffure® - Galerie'; 
$idBody = 'pagegalerie';
$script = '../assets/js/galery.js';
include 'menu.php' ?>
        <div id="galeryPresentation">
            <h1>GALERIE PHOTOS</h1>
            <p id="textGalery">Voici un aperçu de nos coupes et colorations effectuées sur nos clientes...</p>
        </div>
        <div id="containerGalery" class="container-fluid justify-content-center mb-5">
            <div class="row justify-content-center ">
                <div class="photoGallery  col-md-4 " >
                <a href="#" class="imgGalery">
                    <img src="../assets/img/caroussel10.jpg"  class="zoom"  id="image1" width="300" height="300"/>
                </a>
                </div>
                <div class="photoGallery col-md-4 ">
                <a href="#" class="imgGalery">
                    <img src="../assets/img/caroussel1.jpg" class="zoom" alt="caroussel1"  id="image2"  width="300" height="300">
                </a>
                </div>
                <div class="photoGallery col-md-4 ">
                <a href="#" class="imgGalery">
                    <img src="../assets/img/caroussel2.jpg" class="zoom" alt="caroussel2"  id="image3"  width="300" height="300">
                </a>
                </div>
            </div>
                <div class="row">
                    <div class="photoGallery col-md-4 ">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel3.JPG" class="zoom"alt="caroussel3" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4 ">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel4.jpg" class="zoom" alt="caroussel4" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4 ">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel5.jpg" class="zoom" alt="caroussel5" width="1100" height="500">
                    </a>
                    </div>
                </div>
                <div class="row">
                    <div class="photoGallery col-md-4 ">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel6.jpg" class="zoom" alt="caroussel6" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4 ">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel7.jpg" class="zoom" alt="caroussel7" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel8.jpg" class="zoom"alt="caroussel8" width="1100" height="500">
                    </a>
                    </div>
                </div>
                <div class="row">
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel11.jpg" class="zoom" alt="caroussel11" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel12.jpg" class="zoom" alt="caroussel12" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel13.JPG" class="zoom" alt="caroussel13" width="1100" height="500">
                    </a>
                    </div>
                </div>
                <div class="row">
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel14.jpg" class="zoom" alt="caroussel14" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel15.jpg" class="zoom" alt="caroussel15" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel16.jpg" class="zoom" alt="caroussel16" width="1100" height="500">
                    </a>
                    </div>
                </div>
                <div class="row">
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel17.jpg" class="zoom" alt="caroussel17" width="1100" height="500">
                    </a>
                    </div>
                    <div class="photoGallery col-md-4">
                    <a href="#" class="imgGalery">
                        <img src="../assets/img/caroussel18.jpg" class="zoom" alt="caroussel18" width="1100" height="500">
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <!--fenetre modale-->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">              
                <div class="modal-body">
                    <!-- bouton fermeture modale-->
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;<!--bouton x --></span><span class="sr-only">Close</span></button>
                    <img src="" class="imagePreview" style="width: 100%;" >
                </div>
            </div>
        </div>
    </div>
        <?php include 'footer.php' ?>


