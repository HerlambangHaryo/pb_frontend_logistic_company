<div class="col-12 col-md-3  ">
    <div class="sidebar-area">  
        <div class="single-widget-area mb-50 wow fadeInUp">  
            <ul class="catagories-list">
                <li class="active">                 
                    <a href="{{ route('Detailbantukami.show', $id ) }}"
                        class="@if($active == 'Detailbantukami') text-primary @endif">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detailupdateinfo.show', $id ) }}"
                        class="@if($active == 'Detailupdateinfo') text-primary @endif">
                        Info terkini
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detailtimbantuan.show', $id ) }}"
                        class="@if($active == 'Detailtimbantuan') text-primary @endif">
                        Tim Bantuan
                    </a> 
                </li>
                <li>
                    <a href="{{ route('Detaildonasi.show', $id ) }}"
                        class="@if($active == 'Detaildonasi') text-primary @endif">
                        Donasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detailpembelanjaandana.show', $id ) }}"
                        class="@if($active == 'Detailpembelanjaandana') text-primary @endif">
                        Pembelanjaan Dana
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detailkorbanbencana.show', $id ) }}"
                        class="@if($active == 'Detailkorbanbencana') text-primary @endif">
                        Korban Bencana
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detailtitikpengungsian.show', $id ) }}"
                        class="@if($active == 'Detailtitikpengungsian') text-primary @endif">
                        Titik Pengungsian
                    </a>
                </li>
                <li>
                    <a href="{{ route('Detailtitikblokir.show', $id ) }}"
                        class="@if($active == 'Detailtitikblokir') text-primary @endif">
                        Titik Blokir
                    </a> 
                </li>
            </ul>
        </div> 
    </div>			
</div>