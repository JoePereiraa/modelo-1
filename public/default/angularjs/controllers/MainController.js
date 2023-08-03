raddarSite.controller('MainController', ['$scope', '$rootScope', '$http', '$timeout', '$sce', function($scope, $rootScope, $http, $timeout, $sce) {

    var $baseUrl = $scope.baseUrl = $('base').attr('href');


    $scope.abrirModalYoutube = function(iframe) {
        if(angular.isDefined(iframe)) {
            $scope.iframeYoutube = $sce.trustAsHtml('<iframe src="https://youtube.com/embed/' + iframe + '" frameborder="0"></iframe>');
            $scope.modalYoutube = true;
            $('#videoModal').modal('show');
        }
    };

    $scope.alterarImgPrincipal = function(ordem, classe) {
        $(classe).trigger('to.owl.carousel', [ordem, 300]);
    };

    /*  Aplicando assunto no formulario */
    $rootScope.formulario = {};
    $scope.setAssunto = function(assunto = '') {

        if(!assunto || assunto.length === 0) {
            delete $rootScope.formulario.itens;
        } else {
            $rootScope.formulario.itens = assunto;
            if($scope.opcoesProduto) {
                for(const item of Object.entries($scope.opcoesProduto)) {
                    $rootScope.formulario.itens += '\n' + item[0] + ' - ' + item[1];
                }
            }
        }

    };

    $scope.scrollTo = function(elem) {
        document.querySelector(elem).scrollIntoView({behavior: 'smooth'});
    }

    $scope.abrirZapChat = function(msg = '') {
        $rootScope.formulario.mensagem = msg;
        $scope.exibirZapChat = true;
    }

    /* CARRINHO */
    $scope.ajaxPendente = false;

    $scope.adicionarCarrinho = function(idProduto, $event, opcoes = {}) {
        if(!$scope.ajaxPendente) {
            $scope.ajaxPendente = true;
            $($event.currentTarget).addClass('loading');
            $http({
                method: 'POST',
                url: $baseUrl + "carrinho/funcoes/adicionar",
                data: {id: idProduto, opcoes: opcoes}
            }).then(function successCallback(response) {
                if(response.data) {
                    window.location = 'carrinho?returnUrl=' + window.location;
                }
            });
        }

    }

    $scope.aumentarQtdCarrinho = function(keyProduto) {
        if(!$scope.ajaxPendente) {
            $scope.ajaxPendente = true;
            $('#editor' + keyProduto).addClass('loading');
            $('#editorMobile' + keyProduto).addClass('loading');
            $http({
                method: 'POST',
                url: $baseUrl + "carrinho/funcoes/aumentar",
                data: {key: keyProduto}
            }).then(function successCallback(response) {

                if(response.data) {
                    $scope['qtdCarrinho' + keyProduto]++;
                    $scope.ajaxPendente = false;
                    $('#editor' + keyProduto).removeClass('loading');
                    $('#editorMobile' + keyProduto).removeClass('loading');
                }

            });
        }
    }

    $scope.diminuirQtdCarrinho = function(keyProduto) {
        if($scope['qtdCarrinho' + keyProduto] == 1) return;

        if(!$scope.ajaxPendente) {
            $scope.ajaxPendente = true;
            $('#editor' + keyProduto).addClass('loading');
            $('#editorMobile' + keyProduto).addClass('loading');
            $http({
                method: 'POST',
                url: $baseUrl + "carrinho/funcoes/diminuir",
                data: {key: keyProduto}
            }).then(function successCallback(response) {

                if(response.data) {
                    $scope['qtdCarrinho' + keyProduto]--;
                    $scope.ajaxPendente = false;
                    $('#editor' + keyProduto).removeClass('loading');
                    $('#editorMobile' + keyProduto).removeClass('loading');
                }

            });
        }
    }

    $scope.removerCarrinho = function(keyProduto, $event) {

        if(!$scope.ajaxPendente) {
            $scope.ajaxPendente = true;
            $($event.currentTarget).addClass('loading');
            $http({
                method: 'POST',
                url: $baseUrl + "carrinho/funcoes/remover",
                data: {key: keyProduto}
            }).then(function successCallback(response) {

                if(response.data) {
                    window.location = 'carrinho';
                }

            });
        }

    }

    $scope.alterarQtdCarrinhoInput = function(keyProduto) {
        if(!$scope['qtdCarrinho' + keyProduto] || $scope['qtdCarrinho' + keyProduto].length === 0) return;

        if(!$scope.ajaxPendente) {
            $scope.ajaxPendente = true;
            $('#editor' + keyProduto).addClass('loading');
            $('#editorMobile' + keyProduto).addClass('loading');
            $http({
                method: 'POST',
                url: $baseUrl + "carrinho/funcoes/quantidade",
                data: {key: keyProduto, qtd: $scope['qtdCarrinho' + keyProduto]}
            }).then(function successCallback(response) {

                if(response.data) {
                    $scope.ajaxPendente = false;
                    $('#editor' + keyProduto).removeClass('loading');
                    $('#editorMobile' + keyProduto).removeClass('loading');
                }

            });
        }
    }

}])
    ;
