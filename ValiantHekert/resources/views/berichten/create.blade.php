<div class="boxicat col-12">
    <div class="body">
        <div class="create-task">
            <form method="post" action=@if (isset($edit))"/berichten/{{$edit->id}}/update" @else "/berichten" @endif
            class="create-task__form">
            {{csrf_field()}}

            <label class="form-label titel-label">
                titel
            </label><br/>


            <input class="form-input titel-input"
                   type="text"
                   name="titel"
                   placeholder="titel"
                   value="@if (isset($edit)){{ $edit->titel}}@endif">
            <br/><br/>

            <label class="form-label content-label">
                content
            </label><br/>

            <textarea class="form-input content-input"
                      name="content"
                      placeholder="tekts">@if (isset($edit)){{ $edit->content }}@endif</textarea>
            <br/><br/>

            <input class="form-button"
                   type="submit"
                   value="Verzenden"/>
            </form>
        </div>
    </div>
</div>