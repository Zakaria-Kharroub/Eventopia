
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
                        <p><b>Prix:</b> {{ $event->prix}} DH</p>
                        <p><b>Localisation:</b> {{ $event->lieu }}</p>
                        <p><b>Nombre de places:</b> {{ $event->nbre_place }} places</p>
                        <p><b>Description:</b></p>
                        <p>{{ $event->description }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- You can add footer content here if needed -->
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
