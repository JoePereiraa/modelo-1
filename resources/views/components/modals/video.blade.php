<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="close-modal" ng-click="modalYoutube=false" data-bs-dismiss="modal"></div>
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close closebtn" data-bs-dismiss="modal" aria-label="Close" ng-click="modalYoutube=false">
                <span aria-hidden="true">Fechar [X]</span>
            </button>
            <div class="modal-body video" ng-if="modalYoutube" ng-bind-html="iframeYoutube">
            </div>
        </div>
    </div>
</div>