import React,{ Component } from 'react';
import { Link } from 'react-router-dom';

import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';

import { artistDetail, clearArtist } from '../actions';

class ArtistContainer extends Component {

    componentWillMount() {
        this.props.artistDetail(this.props.match.params.id);
    }
    
    renderArtist = (artist) => (
        artist
            ? <div className="artist_view">
                <div className="artist_background" style={{
                    background:`url(/images/${artist.cover})`
                }}>
                    <Link to="/">
                        Back home
                    </Link>
                    <div className="name">{artist.name}</div>
                </div>
                <div className="artist_description">
                    <p>{artist.bio}</p>
                    <div className="tags">
                        <div>
                            <strong>Style:</strong> {artist.style}
                        </div>
                    </div>
                </div>
                <div className="artist_album_list">
                    { artist.albums ? 
                        artist.albums.map( item =>(
                        <div key={item.cover} className="albums">
                            <div className="cover" style={{
                                background:`url(/images/albums/${item.cover})`
                            }}>
                            </div>
                                
                        </div>
                    ))
                    :null
                }
                </div>
            </div>
            : null
    )

    render() {
        return (
            <div>
                { this.renderArtist(this.props.artists.artistDetail) }
            </div>
        );
    }

    componentWillUnmount() {
        this.props.clearArtist();
    }
};

function mapStateToProps(state) {
    return {
        artists: state.artists
    }
}

function mapDispatchToProps(dispatch) {
    return bindActionCreators({
        artistDetail,
        clearArtist
    }, dispatch);
}

export default connect(mapStateToProps, mapDispatchToProps)(ArtistContainer);