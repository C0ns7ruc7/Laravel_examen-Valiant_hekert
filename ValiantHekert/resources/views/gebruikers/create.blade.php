<div class="boxicat col-12">
    <div class="body">
        <div class="create-task">
            <form method="post" action=@if (isset($edit))"/gebruikers/{{$edit->id}}/update" @else "/gebruikers" @endif
            class="create-task__form">
            {{csrf_field()}}

            <label class="form-label naam-label">
                Gebruiker naam
            </label><br/>


            <input class="form-input naam-input"
                   type="text"
                   name="gebruiker"
                   placeholder="naam"
                   value="@if (isset($edit)){{ $edit->gebruiker }}@endif">
            <br/><br/>

            <label class="form-label email-label">
               email
            </label><br/>

            <input class="form-input email-input"
                   type="text"
                   name="email"
                   placeholder="email"
                   value="@if (isset($edit)){{ $edit->email }}@endif">
            <br/><br/>

            <label class="form-label datum-label">
                Datum:
            </label><br/>

            <input class="form-input wachtwoord-input"
                   type="password"
                   name="wachtwoord"
                   placeholder="wachtwoord"
                   value="@if (isset($edit)){{ $edit->wachtwoord }}@endif">
            <br/><br/>

            <input class="form-button"
                   type="submit"
                   value="Verzenden"/>
            </form>
        </div>
    </div>
</div>