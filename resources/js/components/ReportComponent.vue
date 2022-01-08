<template>
    <div class="d-inline">
        <div class="modal fade" :id="'reportModal_' + object_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark">Report a review</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ref="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check text-dark">
                            <input class="form-check-input" type="radio" name="cause" :id="'customRadio1' + object_id" value="Insults" v-model="cause">
                            <label class="form-check-label" :for="'customRadio1' + object_id">
                                Insults
                            </label>
                        </div>
                        <div class="form-check text-dark">
                            <input class="form-check-input" type="radio" name="cause" :id="'customRadio2' + object_id" value="Spam" v-model="cause">
                            <label class="form-check-label" :for="'customRadio2' + object_id">
                                Spam
                            </label>
                        </div>
                        <div class="form-check text-dark">
                            <input class="form-check-input" type="radio" name="cause" :id="'customRadio3' + object_id" value="Links to illegal sites or programs" v-model="cause">
                            <label class="form-check-label" :for="'customRadio3' + object_id">
                                Links to illegal sites or programs
                            </label>
                        </div>
                        <div class="form-check text-dark">
                            <input class="form-check-input" type="radio" name="cause" :id="'customRadio4' + object_id" value="Does not related to the topic under discussion" v-model="cause">
                            <label class="form-check-label" :for="'customRadio4' + object_id">
                                Does not related to the topic under discussion
                            </label>
                        </div>
                        <div class="form-check text-dark">
                            <input class="form-check-input" type="radio" name="cause" :id="'customRadio5' + object_id" value="Other cause" v-model="cause" ref="customRadio5">
                            <label class="form-check-label" :for="'customRadio5' + object_id">
                                Other cause
                            </label>
                        </div>

                        <p class="text-dark m-0 mt-4">Comment</p>
                        <textarea cols="30" rows="5" class="form-control" v-model="comment"></textarea>

                        <p class="mt-3">
                            <button class="btn btn-dark mr-3" data-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-danger" @click="sendReport()">
                                Send
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" @click.prevent="showError()" title="report a review" v-if="this.user == 0">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a70000" class="bi bi-exclamation-diamond" viewBox="0 0 16 16">
                <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
            </svg>
        </a>
        <a href="#" @click.prevent title="report a review"
           data-toggle="modal"
           :data-target="'#reportModal_' + object_id" v-else>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a70000" class="bi bi-exclamation-diamond" viewBox="0 0 16 16">
                <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
            </svg>
        </a>
    </div>
</template>

<script>
export default {
    name: "ReportComponent",
    props: ['user', 'object_id', 'object_type'],
    data() {
      return {
          'cause' : 'Other cause',
          'comment' : ''
      };
    },
    methods: {
        showError()
        {
            alert('Log In to send a report');
        },
        sendReport()
        {
            if(this.cause === 'Other cause' && this.comment === '') {
                alert('provide a comment');
            } else {
                axios.post('/report', {
                    'cause' : this.cause,
                    'comment' : this.comment,
                    'object_id' : this.object_id,
                    'object_type' : this.object_type
                }).catch(error => alert('You have already sent a report'));

                this.$refs['close'].click();
            }
        }
    }
}
</script>

<style scoped>

</style>
