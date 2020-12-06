var app = new Vue({
    el: '#app',
    data: {
        rdvs: [],
        commentaires: [],
        fichiers: [],
        open: {

            rdv: false,
            commentaire: false,
            fichier: false,
        },

        rdv: {
            id: 0,
            adossier_id: window.Laravel.idAdossier,
            debut: '',
            fin: '',

        },

        commentaire: {
            id: 0,
            adossier_id: window.Laravel.idAdossier,
            user_id: 0,
            user_name: '',
            contenu: '',
            created_at: ''
        },

        fichier: {
            id: 0,
            adossier_id: window.Laravel.idAdossier,
            lien: '',
            description: '',
            created_at: ''
        },

        edit: false
    },
    methods: {
        getData() {

            axios.get(window.Laravel.url + '/getdata/' + window.Laravel.idAdossier)
                .then(response => {
                    console.log(response.data);
                    this.rdvs = response.data.rdvs;
                    this.commentaires = response.data.commentaires;
                    this.fichiers = response.data.fichiers;
                })
                .catch(error => {
                    console.log('errors: ', error);
                })
        },

        addCommentaire() {
            axios.post(window.Laravel.url + '/addcommentaire', this.commentaire)
                .then(response => {
                    if (response.data.etat) {

                        Swal.fire(
                            'Succès!',
                            ' Le commentaire est bien envoyé!',
                            'success'
                        );

                        this.open = false;

                        this.commentaires.unshift(this.commentaire);

                        this.commentaire.id = response.data.id;


                        this.commentaire = {
                            id: 0,
                            adossier_id: window.Laravel.idAdossier,
                            user_id: 0,
                            user_name: '',
                            contenu: '',

                        }
                    }
                })
                .catch(error => {
                    console.log('errors: ', error);
                })
        },

        addRdv() {
            axios.post(window.Laravel.url + '/addrdv', this.rdv)
                .then(response => {
                    if (response.data.etat) {

                        Swal.fire(
                            'Succès!',
                            ' Le rendez-vous est bien ajouté!',
                            'success'
                        );

                        this.open = false;

                        this.rdvs.unshift(this.rdv);




                    }
                })
                .catch(error => {
                    console.log('errors: ', error);
                })
        },

        addFichier() {
            axios.post(window.Laravel.url + '/addfichier', this.fichier)
                .then(response => {
                    if (response.data.etat) {

                        Swal.fire(
                            'Succès!',
                            ' Le rendez-vous est bien ajouté!',
                            'success'
                        );

                        this.open = false;

                        this.fichiers.unshift(this.fichier);




                    }
                })
                .catch(error => {
                    console.log('errors: ', error);
                })
        },

        ChangeFile(e) {

            console.log(e.target)

            var fileReader = new FileReader()

            fileReader.readAsDataURL(e.target.files[0])

            fileReader.onload = (e) => {
                this.fichier.lien = e.target.result
            }

            console.log(this.fichier)

        },

        uploadFichiers() {
            axios.post(window.Laravel.url + '/uploadfichiers', this.fichier)
                .then(response => {
                    if (response.data.etat) {


                        Swal.fire(
                            'Succès!',
                            ' Le fichier est bien ajouté!',
                            'success'
                        );

                        this.open = false;

                        this.fichier.unshift(this.fichier);

                        this.fichier.id = response.data.id;

                        this.fichier = {

                            id: 0,
                            adossier_id: window.Laravel.idAdossier,
                            lien: '',
                            description: '',
                            created_at: ''


                        }
                    }

                })
                .catch(error => {
                    console.log('errors: ', error);
                })

        },




        deleteRdv(rdv) {

            Swal.fire({
                title: 'Êtes-vous sûre?',
                text: "Que vous voulez supprimer ce rendez-vous!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, Supprimer!'
            }).then((result) => {
                axios.delete(window.Laravel.url + '/deleterdv/' + rdv.id)
                    .then(response => {
                        if (response.data.etat) {

                            var position = this.rdvs.indexOf(rdv);
                            this.rdvs.splice(position, 1);

                        }


                    })
                    .catch(error => {
                        console.log('errors: ', error);
                    })
                if (result.value) {
                    Swal.fire(
                        'Supprimer!',
                        ' Le rendez-vous est supprimé',
                        'success'
                    )
                }
            })

        },

        deleteCommentaire(commentaire) {

            Swal.fire({
                title: 'Êtes-vous sûre?',
                text: "Que vous voulez supprimer ce Commentaire!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, Supprimer!'
            }).then((result) => {
                axios.delete(window.Laravel.url + '/deletecommentaire/' + commentaire.id)
                    .then(response => {
                        if (response.data.etat) {

                            var position = this.commentaires.indexOf(commentaire);
                            this.commentaires.splice(position, 1);

                        }


                    })
                    .catch(error => {
                        console.log('errors: ', error);
                    })
                if (result.value) {
                    Swal.fire(
                        'Supprimer!',
                        ' Le Commentaire est supprimé',
                        'success'
                    )
                }
            })

        }


    },
    mounted: function () {
        this.getData();
    }
})
