import { createStore, combineReducers, compose } from 'redux'
import { reactReduxFirebase, firebaseReducer } from 'react-redux-firebase'
import firebase from 'firebase'
import { reduxFirestore, firestoreReducer } from 'redux-firestore'
import 'firebase/firestore'

// configurado por https://github.com/prescottprue/react-redux-firebase
// @todo: criar reducers

const firebaseConfig = {
  apiKey: 'AIzaSyA-34VsY7zlhrKVyxGL3uvYVRxtBDX-aCE',
  authDomain: 'fronttoback-clientpanel.firebaseapp.com',
  databaseURL: 'https://fronttoback-clientpanel.firebaseio.com',
  projectId: 'fronttoback-clientpanel',
  storageBucket: 'fronttoback-clientpanel.appspot.com',
  messagingSenderId: '497793513437'
}

const rrfConfig = {
  userProfile: 'users',
  userFirestoreForProfile: true
}

firebase.initializeApp(firebaseConfig)

const firestore = firebase.firestore()
const settings = { timestampsInSnapshots: true}
firestore.settings(settings)

const createStoreWithFirebase = compose(
  reactReduxFirebase(firebase, rrfConfig), // firebase instance as first argument
  reduxFirestore(firebase), // <- needed if using firestore,
  window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
)(createStore)

const rootReducer = combineReducers({
  firebase: firebaseReducer,
  firestore: firestoreReducer // <- needed if using firestore
})

// Create store with reducers and initial state
const initialState = {}
const store = createStoreWithFirebase(rootReducer, initialState)

export default store
