<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                      KERANJANG

                    </div>
                    <div class="card-body">
                 {{ $jumlah}}
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      BELANJAAN GW
                    </div>
                    <div class="card-body">
@foreach ($datas as $item )

<p>
    <i>{{$item->nama_barang}}</i>
<button wire:click="destroy({{ $item->id}})">delete</button>
</p>
@endforeach
                    </div>
                  </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                      INGFO PRODUK
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('gambar/kaori.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">KAORI</h5>
                                      <p class="card-text">waifu kok tengkorak 😂</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">RP. 2000</li>
                                    </ul>
                                    <div class="card-body">
                                      <button class="btn btn-primary"
                                      wire:click="simpan('KAORI', '2000')">BELI </button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('gambar/livai.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">LEVI ACKERMAN</h5>
                                      <p class="card-text">cowok tampan idaman aku 😘</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">RP. 4000</li>
                                    </ul>
                                    <div class="card-body">
                                      <button class="btn btn-primary"
                                      wire:click="simpan('LEVI ACKERMAN', '4000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('gambar/masbro.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">MASBRO</h5>
                                      <p class="card-text">aduh masbro 😂</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">RP. 5000</li>
                                    </ul>
                                    <div class="card-body">
                                      <button class="btn btn-primary"
                                      wire:click="simpan('MASBRO', '5000')">BELI</button>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('gambar/acumalaka.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">ACUMALAKA</h5>
                                      <p class="card-text">ketawa ga nih 😂</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">RP. 3000</li>
                                    </ul>
                                    <div class="card-body">
                                      <button class="btn btn-primary"
                                      wire:click="simpan('ACUMALAKA', '3000')">BELI</button>
                                    </div>
                                  </div>
                            </div>




                        </div>

                    </div>
                  </div>

            </div>
            </div>
        </div>
    </div>
</div>
