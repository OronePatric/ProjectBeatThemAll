
    @extends('layouts.app')
@section('content')
<div class=" container-fluid header-wrapper">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="middle-left">
        <h3 class="text-white fw-bold fs-3">WE ARE ONE IN THE LORD</h3>
        <p class="text-white fw-normal fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, maxime officiis. Minus laboriosam eius commodi?
        </p>
    </div>
</div>
<div class="container " style="margin-top: 5rem">
    <div class="text">
        <h3 class="text-black-50 fw-bold fs-3 mt-3 mb-1" style="text-align: center" >Featured Products</h3>
        <p class="text-black mt-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam minus accusantium dolorum facere vero magnam mollitia, aperiam soluta eaque atque ab doloremque et ratione eligendi impedit cum aliquid consectetur nulla.</p>
        <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis assumenda eos aut perspiciatis? Totam iste ratione ipsam, quo magnam, rerum maiores pariatur exercitationem impedit esse dolorum tenetur distinctio? Aliquam iusto ea itaque consectetur! Animi iure amet veniam ad impedit, laboriosam nulla vel fuga illum quae quidem laudantium perspiciatis repudiandae, fugiat inventore soluta saepe doloribus!</p>
        <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis assumenda eos aut perspiciatis? Totam iste ratione ipsam, quo magnam, rerum maiores pariatur exercitationem impedit esse dolorum tenetur distinctio? Aliquam iusto ea itaque consectetur! Animi iure amet veniam ad impedit, laboriosam nulla vel fuga illum quae quidem laudantium perspiciatis repudiandae, fugiat inventore soluta saepe doloribus!</p>
        <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis assumenda eos aut perspiciatis? Totam iste ratione ipsam, quo magnam, rerum maiores pariatur exercitationem impedit esse dolorum tenetur distinctio? Aliquam iusto ea itaque consectetur! Animi iure amet veniam ad impedit, laboriosam nulla vel fuga illum quae quidem laudantium perspiciatis repudiandae, fugiat inventore soluta saepe doloribus!</p>
    </div>

</div>
@endsection


