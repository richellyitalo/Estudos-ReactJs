import { createStore, combineReducers, compose } from 'redux'
import { reactReduxFirebase, firebaseReducer } from 'react-redux-firebase'
import firebase from 'firebase'
import { reduxFirestore, firestoreReducer } from 'redux-firestore'
import 'firebase/firestore'

// configurado por https://github.com/prescottprue/react-redux-firebase
import notifyReducer from './reducers/notifyReducer'
import settingsReducer from './reducers/settingsReducer'

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
const settings = { timestampsInSnapshots: true }
firestore.settings(settings)

const createStoreWithFirebase = compose(
  reactReduxFirebase(firebase, rrfConfig), // firebase instance as first argument
  reduxFirestore(firebase), // <- needed if using firestore,
  window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
)(createStore)

const rootReducer = combineReducers({
  firebase: firebaseReducer,
  firestore: firestoreReducer, // <- needed if using firestore,
  notify: notifyReducer,
  settings: settingsReducer
})

// Create store with reducers and initial state
if (localStorage.getItem('settings') === null) {
  const defaultSettings = {
    disableBalanceOnAdd: true,
    disableBalanceOnEdit: false,
    allowRegistration: true
  }

  localStorage.setItem('settings', JSON.stringify(defaultSettings))
}

const initialState = { settings: JSON.parse(localStorage.getItem('settings')) }

const store = createStoreWithFirebase(rootReducer, initialState)

export default store
