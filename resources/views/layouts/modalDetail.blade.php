
<div class="modal fade modal-lg" id="autreModal{{$event->id}}" data-bs-backdrop="false" tabindex="1" aria-labelledby="autreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">{{ $event->title }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="storage/images/{{ $event->image }}" class="img-fluid rounded-start" alt="Event Image">
                    </div>
                    <div class="col-md-6">
                        <p><b>Date:</b> {{ $event->date }}</p>
                        <p><b>Localisation:</b> {{ $event->lieu }}</p>
                        <p><b>VIP disponibles :</b> {{ $event->tickets->where('type', 'vip')->sum('quantite') }}</p>
                        <p><b>Standart disponibles :</b> {{ $event->tickets->where('type', 'standart')->sum('quantite') }}

                        <p><b>Total des ticket disponibles :</b>

                            {{$total = $event->tickets->where('type', 'standart')->sum('quantite') + $event->tickets->where('type', 'vip')->sum('quantite') }}

                        </p>

                        <p><b>Description:</b></p>
                        <p>{{ $event->description }}</p>

                        <p><b>etat </b></p>
                        <p>
                           @if($event->etat =='accept')
                            <span class="badge badge-lg bg-success">{{ $event->etat }}</span>
                            @else
                            <span class="badge bg-warning">{{ $event->etat }}</span>
                            @endif

                            
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>

.modal-content {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.modal-header {
    background-color: #007bff;
    color: #ffffff;
    border-bottom: none;
    border-radius: 15px 15px 0 0;
}

.modal-body {
    padding: 20px;
}

.modal-title {
    font-size: 24px;
    margin-bottom: 0;
}

.modal-body p {
    font-size: 16px;
    margin-bottom: 10px;
}

.modal-footer {
    border-top: none;
    justify-content: flex-start;
}

.btn-close {
    color: #ffffff;
}

.btn-close:hover {
    color: #cccccc;
}


</style>
