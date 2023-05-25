@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, back {{ auth()->user()->name }}</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi a dolores error in, dolor nam voluptas
                porro ullam iusto adipisci molestias minus reprehenderit ipsam sit maiores pariatur, dignissimos sapiente.
                Dolores exercitationem unde aliquam dolorem modi omnis repellendus ex facilis eos optio delectus nobis
                tempora, ipsam magnam mollitia consequuntur provident officia sint vel doloremque neque amet laborum
                voluptates aperiam? Dignissimos, a dolor rem, iusto eaque eveniet ex magni consequatur, tempora nulla omnis!
                Amet quisquam impedit facere dolor expedita deleniti nesciunt nisi consequuntur veniam quibusdam adipisci,
                eaque nostrum eos voluptates accusantium perspiciatis fugiat itaque, mollitia reprehenderit voluptatibus in
                odit. Modi, vitae perspiciatis?
            </p>
        </div>
    </div>
@endsection
