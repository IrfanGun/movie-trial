@extends('layout-user')
@section('content')
<div>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-c-m m-tb-10">
					<div id="favoriteSection" class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 " 
						<i class=""></i>
						Favourite
					</div>
				</div>
			</div>
			<div id="favoriteMoviesContainer" style="display: none;">
				<div id="favoriteMovies" style="position:relative" class="row">
				</div>
			</div>
        </div>
		
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				
				
				<div class="flex-w flex-c-m m-tb-10">
				

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>

				</div>
          
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04" id ="searchButton">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" id="searchInput" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
			
			</div>
            
		
                <div class="row " id="searchResults" style="position : relative">
                 
                </div>
                
			
           

			<!-- Load more -->
			
			<div class="flex-c-m flex-w w-full p-t-45" id="loadMoreButtonContainer">
				<a href="#" id="loadMoreButton" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		
			
		</div>
        
	</div>
	<div class="modal fade" id="favoriteNotificationModal" tabindex="-1" role="dialog" aria-labelledby="favoriteNotificationModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="favoriteNotificationModalLabel">Berhasil Ditambahkan!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Film berhasil ditambahkan ke daftar favorit Anda.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
    
		

	<!-- Footer -->
	

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

</div>



<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script>

        let page = 1;
        let isLoading = false;
        let hasMore = true;
        let itemsPerPage = 6; 
		
    
        function loadMoreMovies() {
            if (isLoading || !hasMore) return;
    
            isLoading = true;

    
            let query = document.getElementById('searchInput').value; 
    
            fetch(`/search-movies?query=${query}&page=${page}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        let resultsHtml = '';
                        data.forEach(movie => {
                            resultsHtml += `
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ">
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="${movie.Poster}" alt="${movie.Title}">
                                            <a href="/movie-detail/${movie.imdbID}"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>
                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    ${movie.Title}
                                                </a>
                                                <span class="stext-105 cl3">
                                                    ${movie.Year}
                                                </span>
                                            </div>
                                            <div class="block2-txt-child2 flex-r p-t-3 add-to-favorite">
                                                <a href="#" class="btn-addwish-b2 add-to-favorite dis-block pos-relative js-addwish-b2" data-movie='${JSON.stringify(movie)}' id="favorite-${movie.imdbID}">
                                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                        document.getElementById('searchResults').innerHTML += resultsHtml;
                        page++;

                        if (data.length === itemsPerPage) {
                            document.getElementById('loadMoreButtonContainer').style.display = 'flex';
                        } else {
                            hasMore = false;
                            document.getElementById('loadMoreButtonContainer').style.display = 'none';
                        }
                    } else {
                        hasMore = false;
                        document.getElementById('loadMoreButtonContainer').style.display = 'none';
                    }
                    isLoading = false;
                });
        };
		document.getElementById('searchButton').addEventListener('click', function() {
            page = 1;
            hasMore = true;
            document.getElementById('searchResults').innerHTML = '';
            loadMoreMovies();
        });

	
function displayFavoriteMovies() {
    fetch('/favorite-movies') 
        .then(response => response.json())
        .then(data => {
            let favoriteMoviesHtml = '';
            data.forEach(movie => {
                favoriteMoviesHtml += `
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="${movie.Poster}" alt="${movie.Title}">
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="/movie-detail-fav/${movie.imdbID}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        ${movie.Title}
                                    </a>
                                    <span class="stext-105 cl3">
                                        ${movie.Year}
                                    </span>
                                </div>
                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <button class="btn btn-danger btn-sm remove-favorite" data-imdbid="${movie.imdbID}"> <i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            document.getElementById('favoriteMovies').innerHTML = favoriteMoviesHtml;
        });
}


displayFavoriteMovies();


document.getElementById('favoriteMovies').addEventListener('click', function(event) {
    const removeButton = event.target.closest('.remove-favorite');
    if (removeButton) {
        const imdbID = removeButton.dataset.imdbid;
        removeFromFavorites(imdbID);
    }
});


function removeFromFavorites(imdbID) {
    fetch(`/favorite-movies/${imdbID}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}' 
        }
    })
    .then(response => {
        if (response.ok) {
       
            const favoriteItem = document.getElementById(`favorite-${imdbID}`);
            if (favoriteItem) {
                favoriteItem.remove();
				swal( "Berhasil Menghapus Film ke Daftar Favorite");
			
				displayFavoriteMovies();
            }
        } else {
            console.error('Gagal menghapus item dari favorit.');
        }
    });
}
document.getElementById('favoriteMovies').addEventListener('click', function(event) {
    if (event.target.classList.contains('remove-favorite')) {
        const imdbID = event.target.dataset.imdbid;
        removeFromFavorites(imdbID);
    }
});

		function addToFavorites(movie) {
			fetch('/favorite-movies-post', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				body: JSON.stringify(movie)
			})
			.then(response => response.json())
			.then(data => {
				if (data.success) {

					const heartIcon = document.getElementById(`favorite-${movie.imdbID}`);
					heartIcon.classList.add('active-favorite');
					heartIcon.querySelector('.icon-heart1').style.display = 'none';
					heartIcon.querySelector('.icon-heart2').style.display = 'block';

					swal( "Berhasil Menambahkan Film ke Daftar Favorite");
					displayFavoriteMovies();
				}
			});
		}

		document.getElementById('searchResults').addEventListener('click', function(event) {
		const movieElement = event.target.closest('.isotope-item');
		if (movieElement) {
		const imdbID = movieElement.dataset.imdbid;
		if (imdbID) {
		window.location.href = `/movie-detail/${imdbID}`;
		} }
		});

		document.getElementById('favoriteSection').addEventListener('click', function() {
			const favoriteMoviesContainer = document.getElementById('favoriteMoviesContainer');
			if (favoriteMoviesContainer.style.display === 'none') {
				favoriteMoviesContainer.style.display = 'block';
				displayFavoriteMovies()
			} else {
				favoriteMoviesContainer.style.display = 'none';
			}
		});
		
		document.getElementById('searchResults').addEventListener('click', function(event) {
    let target = event.target.closest('.add-to-favorite');
    if (target) {
        if (target.dataset.movie) { 
            const movie = JSON.parse(target.dataset.movie);
            addToFavorites(movie);
        } else if (target.querySelector('.add-to-favorite').dataset.movie) {
            const movie = JSON.parse(target.querySelector('.add-to-favorite').dataset.movie);
            addToFavorites(movie);
        }
    }
});
		
        document.getElementById('loadMoreButton').addEventListener('click', function() {
            loadMoreMovies();
        });
    
        loadMoreMovies();
    </script>

	
@endsection