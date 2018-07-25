import Rebase from 're-base'
import Firebase from 'firebase'

var app = Firebase.initializeApp({
  apiKey: "",
  authDomain: "",
  databaseURL: "",
  projectId: "",
  storageBucket: "",
  messagingSenderId: ""
})

var base = Rebase.createClass(app.database())

export default base