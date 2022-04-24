<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Описание объекта недвижимости</label>
            <textarea class="form-control" rows="3" name="description" placeholder="Введите описание ..."></textarea>
        </div>
    </div>
</div>

<div class="row" id="imager"
    @if (isset($estate))
        data-action="edit"
    @else
        data-action="create"
    @endif
>
    <div class="col-md-12">
        <h3 class="card-title">Работа с изображениями</h3>
        <br>
        <div class="images-upload-zone">
            <div class="btns-container">
                <div class="btn btn-block btn-outline-primary btn-flat btn-add-file">Добавить изображение</div>
{{--                <div class="btn btn-block btn-outline-primary btn-flat btn-remove-all">Удалить все</div>--}}
            </div>
            <input type="file" name="files[]" multiple="multiple" id="files" style="display: none;">
            <input type="hidden" name="filesInJson" id="filesInJson">

            <div class="images-container">
            </div>
        </div>
    </div>

    @isset($estate)
        <div class="col-md-12 mt-3">
            @if ($estate->photos && $estate->photos->count() > 0)
                <div class="images-container ajaxed" id="estateImages">
                    @foreach ($estate->photos as $key => $photo)
                        <div class="images-container__item"
                             data-route="{{ route('admin.api.estates-photos.destroy', $photo->id) }}"
                             data-link-id="{{ $photo->id }}"
                        >
                            <div class="images-container__item-img">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->path) }}" alt="">
                            </div>
                            <div class="images-container__actions">
                                <div class="images-container__btn images-container__remove btn btn-block btn-secondary btn-flat">Удалить</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <span class="no-images">Нет изображений</span>
            @endif
        </div>
    @endisset
</div>
