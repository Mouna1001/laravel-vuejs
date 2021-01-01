<template>
    <div>
            <h3><p class="font-weight-bold" >Contact Us</p></h3>
        
            <div class="container">
                
                <form @submit="sendMessage">
                    
                    <label for="fname">First Name</label>
                    <input  v-model="fname" type="text" id="fname" name="name"  placeholder="Your name.."  required>

                    <label for="lname">Last Name</label>
                    <input v-model="lname" type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                    <label for="email">Email</label>
                    <input v-model="email" type="email" id="email" name="email" placeholder="Your Email.." required>

                    <label for="country">Country</label>
                    <select id="country" name="country">
                    <option value="usa">Morocco</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    </select>

                    <label for="subject">Subject</label> 
                    <textarea v-model="subject" id="subject" name="subject" placeholder="Please write your message .." style="height:200px" required></textarea>
                    
                    <input v-if="formSending == false" type="submit" value="Submit">
                    <input v-if="formSending == true" type="submit" value="Sending message">
                    
                    
                </form>
            </div> 
      </div> 
    

</template> 

<script>
    export default{
       data(){
            return{ 
                loaded: false, 
                fname: null,
                lname: null,
                email: null,
                subject: null,
                formSending: false,
                buttonText: "Change name here"
            }
        },
        mounted(){
           
        },
        methods:{
             sendMessage(e) {

                e.preventDefault();

                const self = this;

                self.formSending = true;

                Vue.axios.post('/contact-us/sendmessage/ajax',{
                  fname: self.fname,
                  lname: self.lname,
                  email: self.email,
                  subject: self.subject,
                })
                .then(response=>{
                    alert('Thank you your message has been sent!');

                    self.formSending = false;
                    self.fname = null,
                    self.lname= null,
                    self.email= null,
                    self.subject= null
                })
                .catch(error=>{
                    alert('sorry failed');
                    self.formSending = false;

                    console.log(error);
                })
            }

        }
    }

</script>