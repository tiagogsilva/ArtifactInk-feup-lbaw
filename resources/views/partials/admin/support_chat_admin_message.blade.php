<div class="border-bottom card p-2 m-1 chat-message-card">
  <div class="row align-items-center no-gutters">
    <div class="col-md-11">
      <div class="card-body chat-message-card-body">
        <p class="card-text">
          {{ $admin_message->message }}
        </p>
      </div>
    </div>
    <div class="col-md-1">
      <img src="{{ $admin_message->img }}" class="card-img" alt="...">
    </div>
  </div>
</div>