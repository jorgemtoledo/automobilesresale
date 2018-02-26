<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $slides = [
      (object)[
        'titulo'=>'Titulo Imagem',
        'descricao'=>'Descricao da Imagem',
        'url'=>'#link',
        // 'imagem'=>'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'imagem'=>'http://assets.vg247.com/current/2015/03/project_cars_lykan_4.jpg',
      ]
    ];


    $carros = [
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://media.caranddriver.com/images/media/51/25-cars-worth-waiting-for-lp-ford-gt-photo-658253-s-original.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'https://supercarspro.files.wordpress.com/2016/05/sports-cars-1.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ],
      (object)[
        'titulo' => 'Nome do Carro',
        'descricao' => 'Descrição do Carro',
        'imagem' => 'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
        'valor' => 'R$150.000,00',
        'url' => url('detalhe')
      ]
  ];
    
  return view('site.home', compact('slides','carros'));
});

Auth::routes();

Route::get('/contato', function(){
  $galeria = [
    (object)[
      // 'imagem'=>'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
      'imagem'=>'http://o.aolcdn.com/commerce/autodata/images/USC60CHC021A021001.jpg',
    ]
  ];
  return view('site.contato', compact('galeria'));
});

Route::get('/detalhe', function(){
  $galeria = [
    (object)[
      // 'imagem'=>'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
      'imagem'=>'http://o.aolcdn.com/commerce/autodata/images/USC60CHC021A021001.jpg',
    ]
  ];
  return view('site.detalhe',compact('galeria'));
});

Route::get('/empresa', function(){
  $galeria = [
    (object)[
      // 'imagem'=>'http://st.automobilemag.com/uploads/sites/11/2016/02/2017-Chevrolet-Camaro-1LE-homepage.jpg',
      'imagem'=>'http://o.aolcdn.com/commerce/autodata/images/USC60CHC021A021001.jpg',
    ]
  ];
  return view('site.empresa',compact('galeria'));
});

Route::get('/home', 'HomeController@index')->name('home');
