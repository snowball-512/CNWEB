<div class="modal fade" id="StudentDelete{{$student->StudentID}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {{__('Student Delete')}}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn xóa không <b>{{ $student->StudentID }}</b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{__('Cancel')}}</button>
                <button type="submit" class="btn btn-outline-danger">{{__('Xóa')}}</button>
            </div>
        </div>
    </div>
</div>
