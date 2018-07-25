import Rebase from 're-base'
import Firebase from 'firebase'

var app = Firebase.initializeApp({
  apiKey: "AIzaSyBdVSYmS1WBqB9H_vMygdtxdqEWku6Gf6k",
  authDomain: "reactjs-1a485.firebaseapp.com",
  databaseURL: "https://reactjs-1a485.firebaseio.com",
  projectId: "reactjs-1a485",
  storageBucket: "",
  messagingSenderId: "933219977375"
})

var base = Rebase.createClass(app.database())

export default base