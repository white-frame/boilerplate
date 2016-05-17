<form method="POST" action="{{ isset($entity->id) ? url("users/" . $entity->id) : url("users") }}">
    <input type="hidden" name="_method" value="{{ isset($entity->id) ? "PUT" : "POST" }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="user-name">Name</label>
        <input type="text" class="form-control" id="user-name" name="name" value="{{ $entity->name }}">
    </div>
    <div class="form-group">
        <label for="user-email">Email</label>
        <input type="text" class="form-control" id="user-email" name="email" value="{{ $entity->email }}">
    </div>
    <div class="form-group">
        <label for="user-password">Password</label>
        <input type="password" class="form-control" id="user-password" name="password">
    </div>
    <button type="submit" class="btn btn-default">
        {{ isset($entity->id) ? "Update " . $entity->name : "Create user" }}
    </button>
</form>